<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pvwSceneInfos;
use AlibabaCloud\Tea\Model;

class StartCasterResponseBody extends Model
{
    /**
     * @description The PGM scenes.
     *
     * @var pgmSceneInfos
     */
    public $pgmSceneInfos;

    /**
     * @description The PVW scenes.
     *
     * @var pvwSceneInfos
     */
    public $pvwSceneInfos;

    /**
     * @description The request ID.
     *
     * @example 6EBD1AC4-C34D-4AE1-963E-B688A228BE31
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pgmSceneInfos' => 'PgmSceneInfos',
        'pvwSceneInfos' => 'PvwSceneInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pgmSceneInfos) {
            $res['PgmSceneInfos'] = null !== $this->pgmSceneInfos ? $this->pgmSceneInfos->toMap() : null;
        }
        if (null !== $this->pvwSceneInfos) {
            $res['PvwSceneInfos'] = null !== $this->pvwSceneInfos ? $this->pvwSceneInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCasterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PgmSceneInfos'])) {
            $model->pgmSceneInfos = pgmSceneInfos::fromMap($map['PgmSceneInfos']);
        }
        if (isset($map['PvwSceneInfos'])) {
            $model->pvwSceneInfos = pvwSceneInfos::fromMap($map['PvwSceneInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
