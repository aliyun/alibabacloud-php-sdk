<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdatePageRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int[]
     */
    public $siteIds;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'description' => 'Description',
        'id' => 'Id',
        'name' => 'Name',
        'siteIds' => 'SiteIds',
    ];

    public function validate()
    {
        if (\is_array($this->siteIds)) {
            Model::validateArray($this->siteIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->siteIds) {
            if (\is_array($this->siteIds)) {
                $res['SiteIds'] = [];
                $n1 = 0;
                foreach ($this->siteIds as $item1) {
                    $res['SiteIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SiteIds'])) {
            if (!empty($map['SiteIds'])) {
                $model->siteIds = [];
                $n1 = 0;
                foreach ($map['SiteIds'] as $item1) {
                    $model->siteIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
