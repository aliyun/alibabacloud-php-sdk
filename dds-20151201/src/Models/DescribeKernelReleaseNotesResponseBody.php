<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody\releaseNotes;

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
        if (null !== $this->releaseNotes) {
            $this->releaseNotes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseNotes) {
            $res['ReleaseNotes'] = null !== $this->releaseNotes ? $this->releaseNotes->toArray($noStream) : $this->releaseNotes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ReleaseNotes'])) {
            $model->releaseNotes = releaseNotes::fromMap($map['ReleaseNotes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
