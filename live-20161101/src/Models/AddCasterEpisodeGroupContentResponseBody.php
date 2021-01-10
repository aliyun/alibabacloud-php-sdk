<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentResponseBody\itemIds;
use AlibabaCloud\Tea\Model;

class AddCasterEpisodeGroupContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $programId;

    /**
     * @var itemIds
     */
    public $itemIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'programId' => 'ProgramId',
        'itemIds'   => 'ItemIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->itemIds) {
            $res['ItemIds'] = null !== $this->itemIds ? $this->itemIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterEpisodeGroupContentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['ItemIds'])) {
            $model->itemIds = itemIds::fromMap($map['ItemIds']);
        }

        return $model;
    }
}
