<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribeWebTechsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $poweredBy;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $server;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'index'     => 'Index',
        'poweredBy' => 'PoweredBy',
        'version'   => 'Version',
        'URL'       => 'URL',
        'server'    => 'Server',
        'updatedAt' => 'UpdatedAt',
        'title'     => 'Title',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->poweredBy) {
            $res['PoweredBy'] = $this->poweredBy;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['PoweredBy'])) {
            $model->poweredBy = $map['PoweredBy'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
