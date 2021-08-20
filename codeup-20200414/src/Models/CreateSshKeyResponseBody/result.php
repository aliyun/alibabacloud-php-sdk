<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\CreateSshKeyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $fingerPrint;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $keyScope;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'key'         => 'Key',
        'fingerPrint' => 'FingerPrint',
        'createdAt'   => 'CreatedAt',
        'title'       => 'Title',
        'keyScope'    => 'KeyScope',
        'id'          => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->fingerPrint) {
            $res['FingerPrint'] = $this->fingerPrint;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->keyScope) {
            $res['KeyScope'] = $this->keyScope;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['FingerPrint'])) {
            $model->fingerPrint = $map['FingerPrint'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['KeyScope'])) {
            $model->keyScope = $map['KeyScope'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
