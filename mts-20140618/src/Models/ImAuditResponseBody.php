<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\imageResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\ImAuditResponseBody\textResults;
use AlibabaCloud\Tea\Model;

class ImAuditResponseBody extends Model
{
    /**
     * @var bool
     */
    public $imageQuotaExceed;

    /**
     * @var imageResults
     */
    public $imageResults;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $textQuotaExceed;

    /**
     * @var textResults
     */
    public $textResults;
    protected $_name = [
        'imageQuotaExceed' => 'ImageQuotaExceed',
        'imageResults'     => 'ImageResults',
        'requestId'        => 'RequestId',
        'textQuotaExceed'  => 'TextQuotaExceed',
        'textResults'      => 'TextResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageQuotaExceed) {
            $res['ImageQuotaExceed'] = $this->imageQuotaExceed;
        }
        if (null !== $this->imageResults) {
            $res['ImageResults'] = null !== $this->imageResults ? $this->imageResults->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->textQuotaExceed) {
            $res['TextQuotaExceed'] = $this->textQuotaExceed;
        }
        if (null !== $this->textResults) {
            $res['TextResults'] = null !== $this->textResults ? $this->textResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImAuditResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageQuotaExceed'])) {
            $model->imageQuotaExceed = $map['ImageQuotaExceed'];
        }
        if (isset($map['ImageResults'])) {
            $model->imageResults = imageResults::fromMap($map['ImageResults']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TextQuotaExceed'])) {
            $model->textQuotaExceed = $map['TextQuotaExceed'];
        }
        if (isset($map['TextResults'])) {
            $model->textResults = textResults::fromMap($map['TextResults']);
        }

        return $model;
    }
}
