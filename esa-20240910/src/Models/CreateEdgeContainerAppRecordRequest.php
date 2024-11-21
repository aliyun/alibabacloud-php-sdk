<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateEdgeContainerAppRecordRequest extends Model
{
    /**
     * @description The application ID.
     *
     * This parameter is required.
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The associated domain name.
     *
     * This parameter is required.
     * @example a.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The website ID.
     *
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'appId'      => 'AppId',
        'recordName' => 'RecordName',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEdgeContainerAppRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
