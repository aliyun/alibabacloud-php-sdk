<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class GetK8sApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example 5a166fbd-****-4f98-a286-781659d9****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The source from which data is queried.
     *
     *   If you leave this parameter empty, a common query is performed.
     *   If you set the value to deploy, you query application information from the deployment page.
     *
     * @example deploy
     *
     * @var string
     */
    public $from;
    protected $_name = [
        'appId' => 'AppId',
        'from'  => 'From',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetK8sApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        return $model;
    }
}
