<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class UpdateStackTemplateByResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $newTemplateBody;

    /**
     * @var string
     */
    public $oldTemplateBody;
    protected $_name = [
        'requestId'       => 'RequestId',
        'newTemplateBody' => 'NewTemplateBody',
        'oldTemplateBody' => 'OldTemplateBody',
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
        if (null !== $this->newTemplateBody) {
            $res['NewTemplateBody'] = $this->newTemplateBody;
        }
        if (null !== $this->oldTemplateBody) {
            $res['OldTemplateBody'] = $this->oldTemplateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStackTemplateByResourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NewTemplateBody'])) {
            $model->newTemplateBody = $map['NewTemplateBody'];
        }
        if (isset($map['OldTemplateBody'])) {
            $model->oldTemplateBody = $map['OldTemplateBody'];
        }

        return $model;
    }
}
