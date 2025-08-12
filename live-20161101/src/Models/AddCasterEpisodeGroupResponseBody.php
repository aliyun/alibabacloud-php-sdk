<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupResponseBody\itemIds;

class AddCasterEpisodeGroupResponseBody extends Model
{
    /**
     * @var itemIds
     */
    public $itemIds;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'itemIds' => 'ItemIds',
        'programId' => 'ProgramId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->itemIds) {
            $this->itemIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemIds) {
            $res['ItemIds'] = null !== $this->itemIds ? $this->itemIds->toArray($noStream) : $this->itemIds;
        }

        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
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
        if (isset($map['ItemIds'])) {
            $model->itemIds = itemIds::fromMap($map['ItemIds']);
        }

        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
