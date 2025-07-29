<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class GetClusterInspectConfigResponseBody extends Model
{
    /**
     * @description The list of disabled inspection items.
     *
     * @var string[]
     */
    public $disabledCheckItems;

    /**
     * @description Specifies whether to enable inspection.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The inspection schedule defined through the RFC5545 Recurrence Rule syntax. You must specify BYHOUR and BYMINUTE. Only FREQ=DAILY is supported. COUNT and UNTIL are not supported.
     *
     * @example FREQ=DAILY;BYHOUR=10;BYMINUTE=15
     *
     * @var string
     */
    public $recurrence;

    /**
     * @description The request ID.
     *
     * @example 49511F2D-D56A-5C24-B9AE-C8491E09B095
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disabledCheckItems' => 'disabledCheckItems',
        'enabled' => 'enabled',
        'recurrence' => 'recurrence',
        'requestId' => 'requestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabledCheckItems) {
            $res['disabledCheckItems'] = $this->disabledCheckItems;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->recurrence) {
            $res['recurrence'] = $this->recurrence;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterInspectConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disabledCheckItems'])) {
            if (!empty($map['disabledCheckItems'])) {
                $model->disabledCheckItems = $map['disabledCheckItems'];
            }
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['recurrence'])) {
            $model->recurrence = $map['recurrence'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
