<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteSecurityIdentifyResultsRequest;

use AlibabaCloud\Dara\Model;

class deleteCommand extends Model
{
    /**
     * @var int[]
     */
    public $identifyResultIdList;
    protected $_name = [
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
