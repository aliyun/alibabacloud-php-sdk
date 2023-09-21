<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class StopHoneypotRequest extends Model
{
    /**
     * @example 444c699ac151b183b04b562b1dc02639d504c9d097246a322de75c963fe*****
     *
     * @var string
     */
    public $honeypotId;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'honeypotId' => 'HoneypotId',
        'lang'       => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeypotId) {
            $res['HoneypotId'] = $this->honeypotId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopHoneypotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneypotId'])) {
            $model->honeypotId = $map['HoneypotId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
