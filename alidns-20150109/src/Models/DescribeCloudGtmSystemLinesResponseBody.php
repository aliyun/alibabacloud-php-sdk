<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmSystemLinesResponseBody\systemLines;

class DescribeCloudGtmSystemLinesResponseBody extends Model
{
    /**
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
        if (null !== $this->systemLines) {
            $this->systemLines->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->systemLines) {
            $res['SystemLines'] = null !== $this->systemLines ? $this->systemLines->toArray($noStream) : $this->systemLines;
        }

        if (null !== $this->systemLinesTree) {
            $res['SystemLinesTree'] = $this->systemLinesTree;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
