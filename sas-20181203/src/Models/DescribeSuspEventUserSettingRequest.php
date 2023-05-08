<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventUserSettingRequest extends Model
{
    /**
     * @description The ID of the request source. Set the value to **sas**.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The ID. You do not need to specify this parameter.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The IP address of the request. You do not need to specify this parameter.
     *
     * @example 127.0.XX.XX
     *
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'from'     => 'From',
        'id'       => 'Id',
        'sourceIp' => 'SourceIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventUserSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }

        return $model;
    }
}
