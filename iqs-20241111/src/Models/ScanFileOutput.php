<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ScanFileOutput extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ScanFileInfo[]
     */
    public $scanFileInfoList;

    /**
     * @var UnifiedSearchInformation
     */
    public $searchInformation;
    protected $_name = [
        'requestId' => 'requestId',
        'scanFileInfoList' => 'scanFileInfoList',
        'searchInformation' => 'searchInformation',
    ];

    public function validate()
    {
        if (\is_array($this->scanFileInfoList)) {
            Model::validateArray($this->scanFileInfoList);
        }
        if (null !== $this->searchInformation) {
            $this->searchInformation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scanFileInfoList) {
            if (\is_array($this->scanFileInfoList)) {
                $res['scanFileInfoList'] = [];
                $n1 = 0;
                foreach ($this->scanFileInfoList as $item1) {
                    $res['scanFileInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchInformation) {
            $res['searchInformation'] = null !== $this->searchInformation ? $this->searchInformation->toArray($noStream) : $this->searchInformation;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scanFileInfoList'])) {
            if (!empty($map['scanFileInfoList'])) {
                $model->scanFileInfoList = [];
                $n1 = 0;
                foreach ($map['scanFileInfoList'] as $item1) {
                    $model->scanFileInfoList[$n1] = ScanFileInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['searchInformation'])) {
            $model->searchInformation = UnifiedSearchInformation::fromMap($map['searchInformation']);
        }

        return $model;
    }
}
