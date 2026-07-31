<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class DeleteFormationCrawlerRequest extends Model
{
    /**
     * @var int
     */
    public $crawlerTaskId;

    /**
     * @var string
     */
    public $crawlerTaskName;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'crawlerTaskId' => 'CrawlerTaskId',
        'crawlerTaskName' => 'CrawlerTaskName',
        'DBClusterId' => 'DBClusterId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crawlerTaskId) {
            $res['CrawlerTaskId'] = $this->crawlerTaskId;
        }

        if (null !== $this->crawlerTaskName) {
            $res['CrawlerTaskName'] = $this->crawlerTaskName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['CrawlerTaskId'])) {
            $model->crawlerTaskId = $map['CrawlerTaskId'];
        }

        if (isset($map['CrawlerTaskName'])) {
            $model->crawlerTaskName = $map['CrawlerTaskName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
