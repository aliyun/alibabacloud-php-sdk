<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddCasterEpisodeGroupContentResponseBody\itemIds;
use AlibabaCloud\Tea\Model;

class AddCasterEpisodeGroupContentResponseBody extends Model
{
    /**
     * @description The IDs of the episodes.
     *
     * @var itemIds
     */
    public $itemIds;

    /**
     * @description The ID of the episode list. You can use the ID as a request parameter in the API operation that is used to create or add episodes, remove episodes, query episodes, edit an episode list, delete an episode list, query the information about an episode list, start playing an episode list, or stop playing an episode list.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68X****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'itemIds' => 'ItemIds',
        'programId' => 'ProgramId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemIds) {
            $res['ItemIds'] = null !== $this->itemIds ? $this->itemIds->toMap() : null;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
