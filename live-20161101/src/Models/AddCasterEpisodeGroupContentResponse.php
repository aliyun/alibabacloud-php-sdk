<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentResponse\itemIds;
use AlibabaCloud\Tea\Model;

class AddCasterEpisodeGroupContentResponse extends Model
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
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('programId', $this->programId, true);
        Model::validateRequired('itemIds', $this->itemIds, true);
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
     * @return AddCasterEpisodeGroupContentResponse
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
