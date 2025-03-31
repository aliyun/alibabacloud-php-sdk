<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class UploadFileAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadTaskName;

    /**
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'siteId' => 'SiteId',
        'type' => 'Type',
        'uploadTaskName' => 'UploadTaskName',
        'urlObject' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uploadTaskName) {
            $res['UploadTaskName'] = $this->uploadTaskName;
        }

        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UploadTaskName'])) {
            $model->uploadTaskName = $map['UploadTaskName'];
        }

        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}
