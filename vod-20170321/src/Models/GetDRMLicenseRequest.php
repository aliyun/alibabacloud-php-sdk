<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetDRMLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $CDMData;

    /**
     * @var string
     */
    public $certId;

    /**
     * @var string
     */
    public $DRMType;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'CDMData' => 'CDMData',
        'certId' => 'CertId',
        'DRMType' => 'DRMType',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CDMData) {
            $res['CDMData'] = $this->CDMData;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->DRMType) {
            $res['DRMType'] = $this->DRMType;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['CDMData'])) {
            $model->CDMData = $map['CDMData'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['DRMType'])) {
            $model->DRMType = $map['DRMType'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
