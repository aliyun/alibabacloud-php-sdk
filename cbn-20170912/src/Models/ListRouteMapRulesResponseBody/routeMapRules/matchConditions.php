<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListRouteMapRulesResponseBody\routeMapRules;

use AlibabaCloud\Dara\Model;

class matchConditions extends Model
{
    /**
     * @var string[]
     */
    public $addressPrefixesInclude;

    /**
     * @var string[]
     */
    public $addressPrefixesMatch;

    /**
     * @var int[]
     */
    public $asPathsInclude;

    /**
     * @var int[]
     */
    public $asPathsMatch;

    /**
     * @var string[]
     */
    public $communitySetInclude;

    /**
     * @var string[]
     */
    public $communitySetMatch;

    /**
     * @var string[]
     */
    public $destinationInstanceIds;

    /**
     * @var bool
     */
    public $destinationInstanceIdsReverseMatch;

    /**
     * @var string[]
     */
    public $destinationInstanceTypes;

    /**
     * @var string[]
     */
    public $destinationRegionIds;

    /**
     * @var string[]
     */
    public $destinationRouteTableIds;

    /**
     * @var string
     */
    public $matchAddressType;

    /**
     * @var string[]
     */
    public $routeTypes;

    /**
     * @var string[]
     */
    public $sourceInstanceIds;

    /**
     * @var bool
     */
    public $sourceInstanceIdsReverseMatch;

    /**
     * @var string[]
     */
    public $sourceInstanceTypes;

    /**
     * @var string[]
     */
    public $sourceRegionIds;

    /**
     * @var string[]
     */
    public $sourceRouteTableIds;
    protected $_name = [
        'addressPrefixesInclude' => 'AddressPrefixesInclude',
        'addressPrefixesMatch' => 'AddressPrefixesMatch',
        'asPathsInclude' => 'AsPathsInclude',
        'asPathsMatch' => 'AsPathsMatch',
        'communitySetInclude' => 'CommunitySetInclude',
        'communitySetMatch' => 'CommunitySetMatch',
        'destinationInstanceIds' => 'DestinationInstanceIds',
        'destinationInstanceIdsReverseMatch' => 'DestinationInstanceIdsReverseMatch',
        'destinationInstanceTypes' => 'DestinationInstanceTypes',
        'destinationRegionIds' => 'DestinationRegionIds',
        'destinationRouteTableIds' => 'DestinationRouteTableIds',
        'matchAddressType' => 'MatchAddressType',
        'routeTypes' => 'RouteTypes',
        'sourceInstanceIds' => 'SourceInstanceIds',
        'sourceInstanceIdsReverseMatch' => 'SourceInstanceIdsReverseMatch',
        'sourceInstanceTypes' => 'SourceInstanceTypes',
        'sourceRegionIds' => 'SourceRegionIds',
        'sourceRouteTableIds' => 'SourceRouteTableIds',
    ];

    public function validate()
    {
        if (\is_array($this->addressPrefixesInclude)) {
            Model::validateArray($this->addressPrefixesInclude);
        }
        if (\is_array($this->addressPrefixesMatch)) {
            Model::validateArray($this->addressPrefixesMatch);
        }
        if (\is_array($this->asPathsInclude)) {
            Model::validateArray($this->asPathsInclude);
        }
        if (\is_array($this->asPathsMatch)) {
            Model::validateArray($this->asPathsMatch);
        }
        if (\is_array($this->communitySetInclude)) {
            Model::validateArray($this->communitySetInclude);
        }
        if (\is_array($this->communitySetMatch)) {
            Model::validateArray($this->communitySetMatch);
        }
        if (\is_array($this->destinationInstanceIds)) {
            Model::validateArray($this->destinationInstanceIds);
        }
        if (\is_array($this->destinationInstanceTypes)) {
            Model::validateArray($this->destinationInstanceTypes);
        }
        if (\is_array($this->destinationRegionIds)) {
            Model::validateArray($this->destinationRegionIds);
        }
        if (\is_array($this->destinationRouteTableIds)) {
            Model::validateArray($this->destinationRouteTableIds);
        }
        if (\is_array($this->routeTypes)) {
            Model::validateArray($this->routeTypes);
        }
        if (\is_array($this->sourceInstanceIds)) {
            Model::validateArray($this->sourceInstanceIds);
        }
        if (\is_array($this->sourceInstanceTypes)) {
            Model::validateArray($this->sourceInstanceTypes);
        }
        if (\is_array($this->sourceRegionIds)) {
            Model::validateArray($this->sourceRegionIds);
        }
        if (\is_array($this->sourceRouteTableIds)) {
            Model::validateArray($this->sourceRouteTableIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressPrefixesInclude) {
            if (\is_array($this->addressPrefixesInclude)) {
                $res['AddressPrefixesInclude'] = [];
                $n1 = 0;
                foreach ($this->addressPrefixesInclude as $item1) {
                    $res['AddressPrefixesInclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->addressPrefixesMatch) {
            if (\is_array($this->addressPrefixesMatch)) {
                $res['AddressPrefixesMatch'] = [];
                $n1 = 0;
                foreach ($this->addressPrefixesMatch as $item1) {
                    $res['AddressPrefixesMatch'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->asPathsInclude) {
            if (\is_array($this->asPathsInclude)) {
                $res['AsPathsInclude'] = [];
                $n1 = 0;
                foreach ($this->asPathsInclude as $item1) {
                    $res['AsPathsInclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->asPathsMatch) {
            if (\is_array($this->asPathsMatch)) {
                $res['AsPathsMatch'] = [];
                $n1 = 0;
                foreach ($this->asPathsMatch as $item1) {
                    $res['AsPathsMatch'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->communitySetInclude) {
            if (\is_array($this->communitySetInclude)) {
                $res['CommunitySetInclude'] = [];
                $n1 = 0;
                foreach ($this->communitySetInclude as $item1) {
                    $res['CommunitySetInclude'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->communitySetMatch) {
            if (\is_array($this->communitySetMatch)) {
                $res['CommunitySetMatch'] = [];
                $n1 = 0;
                foreach ($this->communitySetMatch as $item1) {
                    $res['CommunitySetMatch'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationInstanceIds) {
            if (\is_array($this->destinationInstanceIds)) {
                $res['DestinationInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->destinationInstanceIds as $item1) {
                    $res['DestinationInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationInstanceIdsReverseMatch) {
            $res['DestinationInstanceIdsReverseMatch'] = $this->destinationInstanceIdsReverseMatch;
        }

        if (null !== $this->destinationInstanceTypes) {
            if (\is_array($this->destinationInstanceTypes)) {
                $res['DestinationInstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->destinationInstanceTypes as $item1) {
                    $res['DestinationInstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationRegionIds) {
            if (\is_array($this->destinationRegionIds)) {
                $res['DestinationRegionIds'] = [];
                $n1 = 0;
                foreach ($this->destinationRegionIds as $item1) {
                    $res['DestinationRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->destinationRouteTableIds) {
            if (\is_array($this->destinationRouteTableIds)) {
                $res['DestinationRouteTableIds'] = [];
                $n1 = 0;
                foreach ($this->destinationRouteTableIds as $item1) {
                    $res['DestinationRouteTableIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->matchAddressType) {
            $res['MatchAddressType'] = $this->matchAddressType;
        }

        if (null !== $this->routeTypes) {
            if (\is_array($this->routeTypes)) {
                $res['RouteTypes'] = [];
                $n1 = 0;
                foreach ($this->routeTypes as $item1) {
                    $res['RouteTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceInstanceIds) {
            if (\is_array($this->sourceInstanceIds)) {
                $res['SourceInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->sourceInstanceIds as $item1) {
                    $res['SourceInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceInstanceIdsReverseMatch) {
            $res['SourceInstanceIdsReverseMatch'] = $this->sourceInstanceIdsReverseMatch;
        }

        if (null !== $this->sourceInstanceTypes) {
            if (\is_array($this->sourceInstanceTypes)) {
                $res['SourceInstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->sourceInstanceTypes as $item1) {
                    $res['SourceInstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceRegionIds) {
            if (\is_array($this->sourceRegionIds)) {
                $res['SourceRegionIds'] = [];
                $n1 = 0;
                foreach ($this->sourceRegionIds as $item1) {
                    $res['SourceRegionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sourceRouteTableIds) {
            if (\is_array($this->sourceRouteTableIds)) {
                $res['SourceRouteTableIds'] = [];
                $n1 = 0;
                foreach ($this->sourceRouteTableIds as $item1) {
                    $res['SourceRouteTableIds'][$n1] = $item1;
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
        if (isset($map['AddressPrefixesInclude'])) {
            if (!empty($map['AddressPrefixesInclude'])) {
                $model->addressPrefixesInclude = [];
                $n1 = 0;
                foreach ($map['AddressPrefixesInclude'] as $item1) {
                    $model->addressPrefixesInclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AddressPrefixesMatch'])) {
            if (!empty($map['AddressPrefixesMatch'])) {
                $model->addressPrefixesMatch = [];
                $n1 = 0;
                foreach ($map['AddressPrefixesMatch'] as $item1) {
                    $model->addressPrefixesMatch[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AsPathsInclude'])) {
            if (!empty($map['AsPathsInclude'])) {
                $model->asPathsInclude = [];
                $n1 = 0;
                foreach ($map['AsPathsInclude'] as $item1) {
                    $model->asPathsInclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AsPathsMatch'])) {
            if (!empty($map['AsPathsMatch'])) {
                $model->asPathsMatch = [];
                $n1 = 0;
                foreach ($map['AsPathsMatch'] as $item1) {
                    $model->asPathsMatch[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommunitySetInclude'])) {
            if (!empty($map['CommunitySetInclude'])) {
                $model->communitySetInclude = [];
                $n1 = 0;
                foreach ($map['CommunitySetInclude'] as $item1) {
                    $model->communitySetInclude[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CommunitySetMatch'])) {
            if (!empty($map['CommunitySetMatch'])) {
                $model->communitySetMatch = [];
                $n1 = 0;
                foreach ($map['CommunitySetMatch'] as $item1) {
                    $model->communitySetMatch[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationInstanceIds'])) {
            if (!empty($map['DestinationInstanceIds'])) {
                $model->destinationInstanceIds = [];
                $n1 = 0;
                foreach ($map['DestinationInstanceIds'] as $item1) {
                    $model->destinationInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationInstanceIdsReverseMatch'])) {
            $model->destinationInstanceIdsReverseMatch = $map['DestinationInstanceIdsReverseMatch'];
        }

        if (isset($map['DestinationInstanceTypes'])) {
            if (!empty($map['DestinationInstanceTypes'])) {
                $model->destinationInstanceTypes = [];
                $n1 = 0;
                foreach ($map['DestinationInstanceTypes'] as $item1) {
                    $model->destinationInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationRegionIds'])) {
            if (!empty($map['DestinationRegionIds'])) {
                $model->destinationRegionIds = [];
                $n1 = 0;
                foreach ($map['DestinationRegionIds'] as $item1) {
                    $model->destinationRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DestinationRouteTableIds'])) {
            if (!empty($map['DestinationRouteTableIds'])) {
                $model->destinationRouteTableIds = [];
                $n1 = 0;
                foreach ($map['DestinationRouteTableIds'] as $item1) {
                    $model->destinationRouteTableIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MatchAddressType'])) {
            $model->matchAddressType = $map['MatchAddressType'];
        }

        if (isset($map['RouteTypes'])) {
            if (!empty($map['RouteTypes'])) {
                $model->routeTypes = [];
                $n1 = 0;
                foreach ($map['RouteTypes'] as $item1) {
                    $model->routeTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceInstanceIds'])) {
            if (!empty($map['SourceInstanceIds'])) {
                $model->sourceInstanceIds = [];
                $n1 = 0;
                foreach ($map['SourceInstanceIds'] as $item1) {
                    $model->sourceInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceInstanceIdsReverseMatch'])) {
            $model->sourceInstanceIdsReverseMatch = $map['SourceInstanceIdsReverseMatch'];
        }

        if (isset($map['SourceInstanceTypes'])) {
            if (!empty($map['SourceInstanceTypes'])) {
                $model->sourceInstanceTypes = [];
                $n1 = 0;
                foreach ($map['SourceInstanceTypes'] as $item1) {
                    $model->sourceInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceRegionIds'])) {
            if (!empty($map['SourceRegionIds'])) {
                $model->sourceRegionIds = [];
                $n1 = 0;
                foreach ($map['SourceRegionIds'] as $item1) {
                    $model->sourceRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SourceRouteTableIds'])) {
            if (!empty($map['SourceRouteTableIds'])) {
                $model->sourceRouteTableIds = [];
                $n1 = 0;
                foreach ($map['SourceRouteTableIds'] as $item1) {
                    $model->sourceRouteTableIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
