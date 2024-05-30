<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeMatchedMaliciousNamesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The display name of the malicious image sample type.
     *
     * @example displayname
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The key of the malicious image sample type.
     *
     * @example key
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'displayName' => 'DisplayName',
        'key'         => 'Key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
