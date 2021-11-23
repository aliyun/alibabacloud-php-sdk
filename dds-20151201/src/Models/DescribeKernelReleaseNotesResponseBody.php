<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody\releaseNotes;
use AlibabaCloud\Tea\Model;

class DescribeKernelReleaseNotesResponseBody extends Model
{
    /**
     * @var releaseNotes
     */
    public $releaseNotes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'releaseNotes' => 'ReleaseNotes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseNotes) {
            $res['ReleaseNotes'] = null !== $this->releaseNotes ? $this->releaseNotes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKernelReleaseNotesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseNotes'])) {
            $model->releaseNotes = releaseNotes::fromMap($map['ReleaseNotes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
