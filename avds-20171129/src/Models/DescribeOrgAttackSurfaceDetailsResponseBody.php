<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class DescribeOrgAttackSurfaceDetailsResponseBody extends Model
{
    /**
     * @var int
     */
    public $lastScannedAt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $firstScannedAt;

    /**
     * @var int
     */
    public $occurrences;
    protected $_name = [
        'lastScannedAt'  => 'LastScannedAt',
        'requestId'      => 'RequestId',
        'firstScannedAt' => 'FirstScannedAt',
        'occurrences'    => 'Occurrences',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastScannedAt) {
            $res['LastScannedAt'] = $this->lastScannedAt;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->firstScannedAt) {
            $res['FirstScannedAt'] = $this->firstScannedAt;
        }
        if (null !== $this->occurrences) {
            $res['Occurrences'] = $this->occurrences;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrgAttackSurfaceDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastScannedAt'])) {
            $model->lastScannedAt = $map['LastScannedAt'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FirstScannedAt'])) {
            $model->firstScannedAt = $map['FirstScannedAt'];
        }
        if (isset($map['Occurrences'])) {
            $model->occurrences = $map['Occurrences'];
        }

        return $model;
    }
}
