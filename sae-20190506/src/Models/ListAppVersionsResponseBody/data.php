<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAppVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description *   The address of the image. This parameter is returned when the **Type** parameter is set to **image**.
     *   The download link of the WAR or JAR package. This parameter is returned when the **Type** parameter is set to **upload**.
     *
     * @var string
     */
    public $buildPackageUrl;

    /**
     * @description The download link of the WAR or JAR package. This parameter is returned when the **Type** parameter is set to **url**.
     *
     * @example 1590124643553
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The error code.
     *
     *   The **ErrorCode** parameter is not returned when the request succeeds.
     *   The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     *
     * @example a0ce266c-d354-423a-9bd6-4083405a****
     *
     * @var string
     */
    public $id;

    /**
     * @description The time when the application was created.
     *
     * @example image
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the version.
     *
     * @var string
     */
    public $warUrl;
    protected $_name = [
        'buildPackageUrl' => 'BuildPackageUrl',
        'createTime'      => 'CreateTime',
        'id'              => 'Id',
        'type'            => 'Type',
        'warUrl'          => 'WarUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildPackageUrl) {
            $res['BuildPackageUrl'] = $this->buildPackageUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildPackageUrl'])) {
            $model->buildPackageUrl = $map['BuildPackageUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }

        return $model;
    }
}
