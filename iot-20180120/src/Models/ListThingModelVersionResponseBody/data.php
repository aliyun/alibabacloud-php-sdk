<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListThingModelVersionResponseBody\data\modelVersions;

class data extends Model
{
    /**
     * @var modelVersions[]
     */
    public $modelVersions;
    protected $_name = [
        'modelVersions' => 'ModelVersions',
    ];

    public function validate()
    {
        if (\is_array($this->modelVersions)) {
            Model::validateArray($this->modelVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelVersions) {
            if (\is_array($this->modelVersions)) {
                $res['ModelVersions'] = [];
                $n1 = 0;
                foreach ($this->modelVersions as $item1) {
                    $res['ModelVersions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ModelVersions'])) {
            if (!empty($map['ModelVersions'])) {
                $model->modelVersions = [];
                $n1 = 0;
                foreach ($map['ModelVersions'] as $item1) {
                    $model->modelVersions[$n1] = modelVersions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
