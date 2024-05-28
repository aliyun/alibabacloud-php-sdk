<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody\systemLines;
use AlibabaCloud\Tea\Model;

class DescribeCloudGtmSystemLinesResponseBody extends Model
{
    /**
     * @example 389DFFA3-77A5-4A9E-BF3D-147C6F98A5BA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var systemLines
     */
    public $systemLines;

    /**
     * @var string
     */
    public $systemLinesTree;
    protected $_name = [
        'requestId'       => 'RequestId',
        'systemLines'     => 'SystemLines',
        'systemLinesTree' => 'SystemLinesTree',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemLines) {
            $res['SystemLines'] = null !== $this->systemLines ? $this->systemLines->toMap() : null;
        }
        if (null !== $this->systemLinesTree) {
            $res['SystemLinesTree'] = $this->systemLinesTree;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmSystemLinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemLines'])) {
            $model->systemLines = systemLines::fromMap($map['SystemLines']);
        }
        if (isset($map['SystemLinesTree'])) {
            $model->systemLinesTree = $map['SystemLinesTree'];
        }

        return $model;
    }
}
