<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig\assignConfigContests\assignConfigContest;

use AlibabaCloud\Dara\Model;

class listObject extends Model
{
    /**
     * @var mixed[]
     */
    public $listObject;
    protected $_name = [
        'listObject' => 'ListObject',
    ];

    public function validate()
    {
        if (\is_array($this->listObject)) {
            Model::validateArray($this->listObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listObject) {
            if (\is_array($this->listObject)) {
                $res['ListObject'] = [];
                $n1                = 0;
                foreach ($this->listObject as $item1) {
                    $res['ListObject'][$n1++] = $item1;
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
        if (isset($map['ListObject'])) {
            if (!empty($map['ListObject'])) {
                $model->listObject = [];
                $n1                = 0;
                foreach ($map['ListObject'] as $item1) {
                    $model->listObject[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
