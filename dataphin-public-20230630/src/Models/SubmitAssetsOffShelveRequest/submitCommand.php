<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitAssetsOffShelveRequest;

use AlibabaCloud\Dara\Model;

class submitCommand extends Model
{
    /**
     * @var string[]
     */
    public $guidList;

    /**
     * @var string
     */
    public $offShelveDescription;
    protected $_name = [
        'guidList' => 'GuidList',
        'offShelveDescription' => 'OffShelveDescription',
    ];

    public function validate()
    {
        if (\is_array($this->guidList)) {
            Model::validateArray($this->guidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guidList) {
            if (\is_array($this->guidList)) {
                $res['GuidList'] = [];
                $n1 = 0;
                foreach ($this->guidList as $item1) {
                    $res['GuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->offShelveDescription) {
            $res['OffShelveDescription'] = $this->offShelveDescription;
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
        if (isset($map['GuidList'])) {
            if (!empty($map['GuidList'])) {
                $model->guidList = [];
                $n1 = 0;
                foreach ($map['GuidList'] as $item1) {
                    $model->guidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OffShelveDescription'])) {
            $model->offShelveDescription = $map['OffShelveDescription'];
        }

        return $model;
    }
}
