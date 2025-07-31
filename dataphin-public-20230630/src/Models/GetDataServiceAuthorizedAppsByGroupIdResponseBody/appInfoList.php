<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceAuthorizedAppsByGroupIdResponseBody;

use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @description AppKey
     *
     * @example 202212
     *
     * @var int
     */
    public $appKey;

    /**
     * @description AppId
     *
     * @example 1021
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'appKey' => 'AppKey',
        'id' => 'Id',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
