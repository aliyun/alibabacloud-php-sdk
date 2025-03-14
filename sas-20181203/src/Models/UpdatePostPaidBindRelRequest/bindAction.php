<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\UpdatePostPaidBindRelRequest;

use AlibabaCloud\Tea\Model;

class bindAction extends Model
{
    /**
     * @description Whether to bind all. Default is **false**. Values:
     *
     * - **true**: Yes
     * - **false**: No
     *
     * @example true
     *
     * @var bool
     */
    public $bindAll;

    /**
     * @description List of specified server UUIDs.
     *
     * @var string[]
     */
    public $uuidList;

    /**
     * @description The Cloud Security Center protection version that needs to be bound. Values:
     * - **1**: Basic Edition
     * - **3**: Enterprise Edition
     * - **5**: Advanced Edition
     * - **6**: Antivirus Edition
     * - **7**: Container Edition
     *
     * @example 3
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'bindAll' => 'BindAll',
        'uuidList' => 'UuidList',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindAll) {
            $res['BindAll'] = $this->bindAll;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindAction
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindAll'])) {
            $model->bindAll = $map['BindAll'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
