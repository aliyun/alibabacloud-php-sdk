<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAICImagesResponseBody;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example 2022-09-22 10:54:34
     *
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example m-ad0ddaddc2d54adeaa09b7c0f1e****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ****.alibaba-inc.com/aic/socimage:test
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @example user
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'description'  => 'Description',
        'imageId'      => 'ImageId',
        'imageUrl'     => 'ImageUrl',
        'status'       => 'Status',
        'user'         => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
