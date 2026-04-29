<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawPluginsResponseBody;

use AlibabaCloud\Dara\Model;

class plugins extends Model
{
    /**
     * @var string[]
     */
    public $channelIds;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string[]
     */
    public $providerIds;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'channelIds' => 'ChannelIds',
        'description' => 'Description',
        'error' => 'Error',
        'format' => 'Format',
        'id' => 'Id',
        'name' => 'Name',
        'origin' => 'Origin',
        'providerIds' => 'ProviderIds',
        'source' => 'Source',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->channelIds)) {
            Model::validateArray($this->channelIds);
        }
        if (\is_array($this->providerIds)) {
            Model::validateArray($this->providerIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelIds) {
            if (\is_array($this->channelIds)) {
                $res['ChannelIds'] = [];
                $n1 = 0;
                foreach ($this->channelIds as $item1) {
                    $res['ChannelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->providerIds) {
            if (\is_array($this->providerIds)) {
                $res['ProviderIds'] = [];
                $n1 = 0;
                foreach ($this->providerIds as $item1) {
                    $res['ProviderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = [];
                $n1 = 0;
                foreach ($map['ChannelIds'] as $item1) {
                    $model->channelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['ProviderIds'])) {
            if (!empty($map['ProviderIds'])) {
                $model->providerIds = [];
                $n1 = 0;
                foreach ($map['ProviderIds'] as $item1) {
                    $model->providerIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
