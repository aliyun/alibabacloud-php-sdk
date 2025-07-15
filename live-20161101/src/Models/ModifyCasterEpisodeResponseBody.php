<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterEpisodeResponseBody extends Model
{
    /**
     * @description The ID of the production studio. You can use the ID as a request parameter in the API operation that is used to copy the configurations of a scene, update the configurations of a scene, query the scenes of a production studio, query the audio configurations of a scene, start a scene in the production studio, or stop a scene in the production studio.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The ID of the episode. You can use the ID as a request parameter in the API operation that is used to delete an episode list from a production studio, add episodes to an episode list, remove episodes from an episode list, query the information about episodes in an episode list, update episodes in an episode list, delete an episode list, query the information about an episode list, start an episode list, or stop an episode list.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf938623****
     *
     * @var string
     */
    public $episodeId;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'casterId' => 'CasterId',
        'episodeId' => 'EpisodeId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterEpisodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
