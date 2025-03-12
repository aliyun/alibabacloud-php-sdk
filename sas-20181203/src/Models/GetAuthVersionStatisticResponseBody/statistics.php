<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthVersionStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @description The edition of Security Center. Valid values:
     *
     *   **1**: Basic edition (Unauthorized)
     *   **6**: Anti-virus edition
     *   **5**: Advanced edition
     *   **3**: Enterprise edition
     *   **7**: Ultimate edition
     *   **10**: Value-added Plan edition
     *
     * @example 6
     *
     * @var int
     */
    public $authVersion;

    /**
     * @description The number of authorized servers.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'authVersion' => 'AuthVersion',
        'count'       => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authVersion) {
            $res['AuthVersion'] = $this->authVersion;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthVersion'])) {
            $model->authVersion = $map['AuthVersion'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
