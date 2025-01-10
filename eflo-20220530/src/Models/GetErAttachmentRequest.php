<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetErAttachmentRequest extends Model
{
    /**
     * @description The ID of the Lingjun HUB network connection instance.
     *
     * This parameter is required.
     * @example er-attachment-i1ioibyf
     *
     * @var string
     */
    public $erAttachmentId;

    /**
     * @description Lingjun HUB ID.
     *
     * This parameter is required.
     * @example er-kkopgtne
     *
     * @var string
     */
    public $erId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'erAttachmentId' => 'ErAttachmentId',
        'erId'           => 'ErId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erAttachmentId) {
            $res['ErAttachmentId'] = $this->erAttachmentId;
        }
        if (null !== $this->erId) {
            $res['ErId'] = $this->erId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetErAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErAttachmentId'])) {
            $model->erAttachmentId = $map['ErAttachmentId'];
        }
        if (isset($map['ErId'])) {
            $model->erId = $map['ErId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
