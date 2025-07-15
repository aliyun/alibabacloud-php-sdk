<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListPlaylistItemsResponseBody;

use AlibabaCloud\Tea\Model;

class programItems extends Model
{
    /**
     * @description The sequence number of the episode in the query result.
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description The ID of the episode list. You can use the ID as a request parameter in the API operation that is used to edit the episode list, delete the episode list, query the information about the episode list, start the episode list, or stop the episode list.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $programId;

    /**
     * @description The ID of the episode.
     *
     * @example c10f3d63-eacf-4fbf-bd48-a07a6ba7****
     *
     * @var string
     */
    public $programItemId;

    /**
     * @description The name of the episode.
     *
     * @example playlistItem1
     *
     * @var string
     */
    public $programItemName;

    /**
     * @description The resource type.
     *
     * @example vod
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The resource ID.
     *
     * @example asdfasdf8as9df8sa9df89****
     *
     * @var string
     */
    public $resourceValue;
    protected $_name = [
        'index' => 'Index',
        'programId' => 'ProgramId',
        'programItemId' => 'ProgramItemId',
        'programItemName' => 'ProgramItemName',
        'resourceType' => 'ResourceType',
        'resourceValue' => 'ResourceValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->programId) {
            $res['ProgramId'] = $this->programId;
        }
        if (null !== $this->programItemId) {
            $res['ProgramItemId'] = $this->programItemId;
        }
        if (null !== $this->programItemName) {
            $res['ProgramItemName'] = $this->programItemName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceValue) {
            $res['ResourceValue'] = $this->resourceValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return programItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['ProgramId'])) {
            $model->programId = $map['ProgramId'];
        }
        if (isset($map['ProgramItemId'])) {
            $model->programItemId = $map['ProgramItemId'];
        }
        if (isset($map['ProgramItemName'])) {
            $model->programItemName = $map['ProgramItemName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceValue'])) {
            $model->resourceValue = $map['ResourceValue'];
        }

        return $model;
    }
}
