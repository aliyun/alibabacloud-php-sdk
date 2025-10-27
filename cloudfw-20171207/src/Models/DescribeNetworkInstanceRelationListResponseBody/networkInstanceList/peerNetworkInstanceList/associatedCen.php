<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceRelationListResponseBody\networkInstanceList\peerNetworkInstanceList;

use AlibabaCloud\Dara\Model;

class associatedCen extends Model
{
    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $cenName;

    /**
     * @var string
     */
    public $transitRouterType;
    protected $_name = [
        'attachmentId' => 'AttachmentId',
        'attachmentName' => 'AttachmentName',
        'cenId' => 'CenId',
        'cenName' => 'CenName',
        'transitRouterType' => 'TransitRouterType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }

        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->cenName) {
            $res['CenName'] = $this->cenName;
        }

        if (null !== $this->transitRouterType) {
            $res['TransitRouterType'] = $this->transitRouterType;
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
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }

        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['CenName'])) {
            $model->cenName = $map['CenName'];
        }

        if (isset($map['TransitRouterType'])) {
            $model->transitRouterType = $map['TransitRouterType'];
        }

        return $model;
    }
}
