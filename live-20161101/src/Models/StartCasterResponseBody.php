<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pgmSceneInfos;
use AlibabaCloud\SDK\Live\V20161101\Models\StartCasterResponseBody\pvwSceneInfos;
use AlibabaCloud\Tea\Model;

class StartCasterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pvwSceneInfos
     */
    public $pvwSceneInfos;

    /**
     * @var pgmSceneInfos
     */
    public $pgmSceneInfos;
    protected $_name = [
        'requestId'     => 'RequestId',
        'pvwSceneInfos' => 'PvwSceneInfos',
        'pgmSceneInfos' => 'PgmSceneInfos',
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
        if (null !== $this->pvwSceneInfos) {
            $res['PvwSceneInfos'] = null !== $this->pvwSceneInfos ? $this->pvwSceneInfos->toMap() : null;
        }
        if (null !== $this->pgmSceneInfos) {
            $res['PgmSceneInfos'] = null !== $this->pgmSceneInfos ? $this->pgmSceneInfos->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PvwSceneInfos'])) {
            $model->pvwSceneInfos = pvwSceneInfos::fromMap($map['PvwSceneInfos']);
        }
        if (isset($map['PgmSceneInfos'])) {
            $model->pgmSceneInfos = pgmSceneInfos::fromMap($map['PgmSceneInfos']);
        }

        return $model;
    }
}
