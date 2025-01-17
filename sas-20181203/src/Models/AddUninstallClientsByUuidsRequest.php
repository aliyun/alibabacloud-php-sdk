<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class AddUninstallClientsByUuidsRequest extends Model
{
    /**
     * @var string
     */
    public $callMethod;
    /**
     * @var string
     */
    public $feedback;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $sourceIp;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
