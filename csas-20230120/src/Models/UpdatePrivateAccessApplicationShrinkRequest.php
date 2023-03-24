<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class UpdatePrivateAccessApplicationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addressesShrink;

    /**
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example Cover
     *
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $portRangesShrink;

    /**
     * @example All
     *
     * @var string
     */
    public $protocol;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tagIdsShrink;
    protected $_name = [
        'addressesShrink'  => 'Addresses',
        'applicationId'    => 'ApplicationId',
        'description'      => 'Description',
        'modifyType'       => 'ModifyType',
        'portRangesShrink' => 'PortRanges',
        'protocol'         => 'Protocol',
        'status'           => 'Status',
        'tagIdsShrink'     => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressesShrink) {
            $res['Addresses'] = $this->addressesShrink;
        }
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->portRangesShrink) {
            $res['PortRanges'] = $this->portRangesShrink;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePrivateAccessApplicationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addresses'])) {
            $model->addressesShrink = $map['Addresses'];
        }
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['PortRanges'])) {
            $model->portRangesShrink = $map['PortRanges'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
        }

        return $model;
    }
}
