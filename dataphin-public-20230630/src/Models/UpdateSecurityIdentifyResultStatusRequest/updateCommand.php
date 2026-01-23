<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateSecurityIdentifyResultStatusRequest;

use AlibabaCloud\Dara\Model;

class updateCommand extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int[]
     */
    public $identifyResultIdList;
    protected $_name = [
        'enable' => 'Enable',
        'identifyResultIdList' => 'IdentifyResultIdList',
    ];

    public function validate()
    {
        if (\is_array($this->identifyResultIdList)) {
            Model::validateArray($this->identifyResultIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->identifyResultIdList) {
            if (\is_array($this->identifyResultIdList)) {
                $res['IdentifyResultIdList'] = [];
                $n1 = 0;
                foreach ($this->identifyResultIdList as $item1) {
                    $res['IdentifyResultIdList'][$n1] = $item1;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['IdentifyResultIdList'])) {
            if (!empty($map['IdentifyResultIdList'])) {
                $model->identifyResultIdList = [];
                $n1 = 0;
                foreach ($map['IdentifyResultIdList'] as $item1) {
                    $model->identifyResultIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
