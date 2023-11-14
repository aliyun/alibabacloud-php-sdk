<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetLogMetaRequest extends Model
{
    /**
     * @description The name of the dedicated Logstore in which logs are stored.
     *
     * >  You can call the [DescribeLogMeta](~~DescribeLogMeta~~) operation to query the name of the Logstore.
     * @example aegis-log-login
     *
     * @var string
     */
    public $logStore;
    protected $_name = [
        'logStore' => 'LogStore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStore) {
            $res['LogStore'] = $this->logStore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLogMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStore'])) {
            $model->logStore = $map['LogStore'];
        }

        return $model;
    }
}
