<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DownloadOrganizationSDKResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example base64string
     *
     * @var string
     */
    public $content;

    /**
     * @example dir/file
     *
     * @var string
     */
    public $path;
    protected $_name = [
        'content' => 'Content',
        'path'    => 'Path',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        return $model;
    }
}
