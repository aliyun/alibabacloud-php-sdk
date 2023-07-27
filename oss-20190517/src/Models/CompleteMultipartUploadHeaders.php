<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CompleteMultipartUploadHeaders extends Model
{
    public $commonHeaders;

    /**
     * @example yes
     *
     * @var string
     */
    public $completeAll;

    /**
     * @example true
     *
     * @var string
     */
    public $forbidOverwrite;
    protected $_name = [
        'completeAll'     => 'x-oss-complete-all',
        'forbidOverwrite' => 'x-oss-forbid-overwrite',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->completeAll) {
            $res['x-oss-complete-all'] = $this->completeAll;
        }
        if (null !== $this->forbidOverwrite) {
            $res['x-oss-forbid-overwrite'] = $this->forbidOverwrite;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompleteMultipartUploadHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['x-oss-complete-all'])) {
            $model->completeAll = $map['x-oss-complete-all'];
        }
        if (isset($map['x-oss-forbid-overwrite'])) {
            $model->forbidOverwrite = $map['x-oss-forbid-overwrite'];
        }

        return $model;
    }
}
