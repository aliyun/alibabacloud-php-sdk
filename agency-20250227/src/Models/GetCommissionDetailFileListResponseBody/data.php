<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Agency\V20250227\Models\GetCommissionDetailFileListResponseBody\data\fileList;

class data extends Model
{
    /**
     * @var string
     */
    public $billMonth;
    /**
     * @var fileList[]
     */
    public $fileList;
    /**
     * @var string
     */
    public $partnerUid;
    protected $_name = [
        'billMonth'  => 'BillMonth',
        'fileList'   => 'FileList',
        'partnerUid' => 'PartnerUid',
    ];

    public function validate()
    {
        if (\is_array($this->fileList)) {
            Model::validateArray($this->fileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billMonth) {
            $res['BillMonth'] = $this->billMonth;
        }

        if (null !== $this->fileList) {
            if (\is_array($this->fileList)) {
                $res['FileList'] = [];
                $n1              = 0;
                foreach ($this->fileList as $item1) {
                    $res['FileList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->partnerUid) {
            $res['PartnerUid'] = $this->partnerUid;
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
        if (isset($map['BillMonth'])) {
            $model->billMonth = $map['BillMonth'];
        }

        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n1              = 0;
                foreach ($map['FileList'] as $item1) {
                    $model->fileList[$n1++] = fileList::fromMap($item1);
                }
            }
        }

        if (isset($map['PartnerUid'])) {
            $model->partnerUid = $map['PartnerUid'];
        }

        return $model;
    }
}
