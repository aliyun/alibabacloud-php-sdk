<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAbnormalPatternDetectionResponseBody\detectionItems;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $accessIp;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var int
     */
    public $failedCount;
    /**
     * @var string
     */
    public $patternId;
    /**
     * @var int
     */
    public $queryCount;
    /**
     * @var string
     */
    public $relatedMetrics;
    /**
     * @var string
     */
    public $SQLPattern;
    /**
     * @var string
     */
    public $tables;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'accessIp'       => 'AccessIp',
        'detail'         => 'Detail',
        'failedCount'    => 'FailedCount',
        'patternId'      => 'PatternId',
        'queryCount'     => 'QueryCount',
        'relatedMetrics' => 'RelatedMetrics',
        'SQLPattern'     => 'SQLPattern',
        'tables'         => 'Tables',
        'user'           => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIp) {
            $res['AccessIp'] = $this->accessIp;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->patternId) {
            $res['PatternId'] = $this->patternId;
        }

        if (null !== $this->queryCount) {
            $res['QueryCount'] = $this->queryCount;
        }

        if (null !== $this->relatedMetrics) {
            $res['RelatedMetrics'] = $this->relatedMetrics;
        }

        if (null !== $this->SQLPattern) {
            $res['SQLPattern'] = $this->SQLPattern;
        }

        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AccessIp'])) {
            $model->accessIp = $map['AccessIp'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['PatternId'])) {
            $model->patternId = $map['PatternId'];
        }

        if (isset($map['QueryCount'])) {
            $model->queryCount = $map['QueryCount'];
        }

        if (isset($map['RelatedMetrics'])) {
            $model->relatedMetrics = $map['RelatedMetrics'];
        }

        if (isset($map['SQLPattern'])) {
            $model->SQLPattern = $map['SQLPattern'];
        }

        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
