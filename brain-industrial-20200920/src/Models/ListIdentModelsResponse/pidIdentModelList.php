<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListIdentModelsResponse\pidIdentModelList\model;
use AlibabaCloud\Tea\Model;

class pidIdentModelList extends Model
{
    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var model
     */
    public $model;
    protected $_name = [
        'modelId' => 'ModelId',
        'desc'    => 'Desc',
        'model'   => 'Model',
    ];

    public function validate()
    {
        Model::validateRequired('modelId', $this->modelId, true);
        Model::validateRequired('desc', $this->desc, true);
        Model::validateRequired('model', $this->model, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pidIdentModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Model'])) {
            $model->model = model::fromMap($map['Model']);
        }

        return $model;
    }
}
