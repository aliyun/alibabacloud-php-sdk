<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckTrialFixCountRequest extends Model
{
    /**
     * @example [{\\"name\\":\\"oval:com.redhat.rhsa:def:20192143\\",\\"uuid\\":\\"80ee3226-1f96-4da0-a3ed-55c104e2****\\",\\"tag\\":\\"oval\\"}]
     *
     * @var string
     */
    public $info;

    /**
     * @description This parameter is required.
     *
     * @example cve
     *
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var string[]
     */
    public $vulNames;
    protected $_name = [
        'info'     => 'Info',
        'type'     => 'Type',
        'uuids'    => 'Uuids',
        'vulNames' => 'VulNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->vulNames) {
            $res['VulNames'] = $this->vulNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTrialFixCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = $map['Uuids'];
            }
        }
        if (isset($map['VulNames'])) {
            if (!empty($map['VulNames'])) {
                $model->vulNames = $map['VulNames'];
            }
        }

        return $model;
    }
}
