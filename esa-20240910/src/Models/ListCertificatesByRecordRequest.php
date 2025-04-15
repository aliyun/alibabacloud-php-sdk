<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListCertificatesByRecordRequest extends Model
{
    /**
     * @var bool
     */
    public $detail;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var bool
     */
    public $validOnly;
    protected $_name = [
        'detail' => 'Detail',
        'recordName' => 'RecordName',
        'siteId' => 'SiteId',
        'validOnly' => 'ValidOnly',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->validOnly) {
            $res['ValidOnly'] = $this->validOnly;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['ValidOnly'])) {
            $model->validOnly = $map['ValidOnly'];
        }

        return $model;
    }
}
