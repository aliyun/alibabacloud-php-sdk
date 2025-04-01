<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeCostCheckAdvicesResponseBody\data\adviceList\tags;

class adviceList extends Model
{
    /**
     * @var string
     */
    public $accountFolderId;

    /**
     * @var string
     */
    public $accountFolderName;

    /**
     * @var int
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $email;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $gmtDeleted;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $severity;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountFolderId' => 'AccountFolderId',
        'accountFolderName' => 'AccountFolderName',
        'aliyunId' => 'AliyunId',
        'content' => 'Content',
        'email' => 'Email',
        'endTime' => 'EndTime',
        'gmtDeleted' => 'GmtDeleted',
        'product' => 'Product',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'severity' => 'Severity',
        'startTime' => 'StartTime',
        'tags' => 'Tags',
        'url' => 'Url',
        'userName' => 'UserName',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountFolderId) {
            $res['AccountFolderId'] = $this->accountFolderId;
        }

        if (null !== $this->accountFolderName) {
            $res['AccountFolderName'] = $this->accountFolderName;
        }

        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->gmtDeleted) {
            $res['GmtDeleted'] = $this->gmtDeleted;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountFolderId'])) {
            $model->accountFolderId = $map['AccountFolderId'];
        }

        if (isset($map['AccountFolderName'])) {
            $model->accountFolderName = $map['AccountFolderName'];
        }

        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GmtDeleted'])) {
            $model->gmtDeleted = $map['GmtDeleted'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
