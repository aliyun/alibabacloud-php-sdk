<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class AddUninstallClientsByUuidsRequest extends Model
{
    /**
     * @description The method name. Default value: init.
     *
     * @example init
     *
     * @var string
     */
    public $callMethod;

    /**
     * @description The feedback.
     *
     * @example reinstall
     *
     * @var string
     */
    public $feedback;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The source IP address of the request. You do not need to specify this parameter. It is automatically obtained by the system.
     *
     * @example 1.2.XXX.XXX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The UUID of the server that you want to unbind. Separate multiple UUIDs with commas (,).
     *
     * This parameter is required.
     * @example inet-183707ae-3bdf-4db0-b771-3e9962bf****,inet-49dceccc-4f01-469b-8411-2416ea12****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'callMethod' => 'CallMethod',
        'feedback'   => 'Feedback',
        'region'     => 'Region',
        'sourceIp'   => 'SourceIp',
        'uuids'      => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callMethod) {
            $res['CallMethod'] = $this->callMethod;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddUninstallClientsByUuidsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallMethod'])) {
            $model->callMethod = $map['CallMethod'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
