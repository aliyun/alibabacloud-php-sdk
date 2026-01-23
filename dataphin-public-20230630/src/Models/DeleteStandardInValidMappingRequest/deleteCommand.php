<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteStandardInValidMappingRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var string[]
     */
    public $belongGuidList;

    /**
     * @var string[]
     */
    public $guidList;

    /**
     * @var int
     */
    public $standardId;
    protected $_name = [
        'belongGuidList' => 'BelongGuidList',
        'guidList' => 'GuidList',
        'standardId' => 'StandardId',
    ];

    public function validate()
    {
        if (\is_array($this->belongGuidList)) {
            Model::validateArray($this->belongGuidList);
        }
        if (\is_array($this->guidList)) {
            Model::validateArray($this->guidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->belongGuidList) {
            if (\is_array($this->belongGuidList)) {
                $res['BelongGuidList'] = [];
                $n1 = 0;
                foreach ($this->belongGuidList as $item1) {
                    $res['BelongGuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
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
        if (isset($map['BelongGuidList'])) {
            if (!empty($map['BelongGuidList'])) {
                $model->belongGuidList = [];
                $n1 = 0;
                foreach ($map['BelongGuidList'] as $item1) {
                    $model->belongGuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

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

        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        return $model;
    }
}
