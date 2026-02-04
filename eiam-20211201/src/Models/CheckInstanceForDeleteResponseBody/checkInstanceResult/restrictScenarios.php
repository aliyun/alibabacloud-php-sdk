<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CheckInstanceForDeleteResponseBody\checkInstanceResult;

use AlibabaCloud\Dara\Model;

class restrictScenarios extends Model
{
    /**
     * @var string
     */
    public $helpfulConsoleUrl;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $restrictReason;
    protected $_name = [
        'helpfulConsoleUrl' => 'HelpfulConsoleUrl',
        'resourceId' => 'ResourceId',
        'restrictReason' => 'RestrictReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->helpfulConsoleUrl) {
            $res['HelpfulConsoleUrl'] = $this->helpfulConsoleUrl;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->restrictReason) {
            $res['RestrictReason'] = $this->restrictReason;
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
        if (isset($map['HelpfulConsoleUrl'])) {
            $model->helpfulConsoleUrl = $map['HelpfulConsoleUrl'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RestrictReason'])) {
            $model->restrictReason = $map['RestrictReason'];
        }

        return $model;
    }
}
