<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Dara\Model;

class rerank extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $rerankInstruct;

    /**
     * @var string
     */
    public $rerankMode;
    protected $_name = [
        'modelName' => 'ModelName',
        'rerankInstruct' => 'RerankInstruct',
        'rerankMode' => 'RerankMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->rerankInstruct) {
            $res['RerankInstruct'] = $this->rerankInstruct;
        }

        if (null !== $this->rerankMode) {
            $res['RerankMode'] = $this->rerankMode;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['RerankInstruct'])) {
            $model->rerankInstruct = $map['RerankInstruct'];
        }

        if (isset($map['RerankMode'])) {
            $model->rerankMode = $map['RerankMode'];
        }

        return $model;
    }
}
