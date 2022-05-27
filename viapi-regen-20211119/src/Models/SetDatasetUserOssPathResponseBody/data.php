<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapiregen\V20211119\Models\SetDatasetUserOssPathResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'id'     => 'Id',
        'ossUrl' => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
