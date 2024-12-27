<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CompareImageFacesRequest;

use AlibabaCloud\Tea\Model;

class source extends Model
{
    /**
     * @description The OSS URL of the image file.
     *
     * Specify the URL in the `oss://<bucket>/<object>` format. `<bucket>` specifies the name of the OSS bucket that is in the same region as the current project. `<object>` specifies path of the object with the extension included.
     * @example oss://test-bucket/test-object1
     *
     * @var string
     */
    public $URI1;

    /**
     * @description The OSS URL of the image file.
     *
     * Specify the URL in the `oss://<bucket>/<object>` format. `<bucket>` specifies the name of the OSS bucket that is in the same region as the current project, and `<object>` specifies the path of the object with the extension included.
     * @example oss://test-bucket/test-object2
     *
     * @var string
     */
    public $URI2;
    protected $_name = [
        'URI1' => 'URI1',
        'URI2' => 'URI2',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URI1) {
            $res['URI1'] = $this->URI1;
        }
        if (null !== $this->URI2) {
            $res['URI2'] = $this->URI2;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return source
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URI1'])) {
            $model->URI1 = $map['URI1'];
        }
        if (isset($map['URI2'])) {
            $model->URI2 = $map['URI2'];
        }

        return $model;
    }
}
