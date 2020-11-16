<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $domainTranscodeName;
    protected $_name = [
        'domainTranscodeName' => 'DomainTranscodeName',
    ];

    public function validate()
    {
        Model::validateRequired('domainTranscodeName', $this->domainTranscodeName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTranscodeName) {
            $res['DomainTranscodeName'] = $this->domainTranscodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTranscodeName'])) {
            $model->domainTranscodeName = $map['DomainTranscodeName'];
        }

        return $model;
    }
}
