<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models;

use AlibabaCloud\Tea\Model;

class UpdateLabelsetRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $objectKey;

    /**
     * @var string
     */
    public $userOssUrl;
    protected $_name = [
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
        'objectKey'   => 'ObjectKey',
        'userOssUrl'  => 'UserOssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectKey) {
            $res['ObjectKey'] = $this->objectKey;
        }
        if (null !== $this->userOssUrl) {
            $res['UserOssUrl'] = $this->userOssUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLabelsetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectKey'])) {
            $model->objectKey = $map['ObjectKey'];
        }
        if (isset($map['UserOssUrl'])) {
            $model->userOssUrl = $map['UserOssUrl'];
        }

        return $model;
    }
}
