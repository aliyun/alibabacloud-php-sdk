<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Beian\V20160810\Models;

use AlibabaCloud\Tea\Model;

class SubmitAccessorFullDomainsOssListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $caller;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $ossList;
    protected $_name = [
        'caller'  => 'Caller',
        'ossList' => 'OssList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->ossList) {
            $res['OssList'] = $this->ossList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAccessorFullDomainsOssListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['OssList'])) {
            if (!empty($map['OssList'])) {
                $model->ossList = $map['OssList'];
            }
        }

        return $model;
    }
}
